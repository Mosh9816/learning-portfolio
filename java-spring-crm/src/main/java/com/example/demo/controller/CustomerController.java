package com.example.demo.controller;

import java.time.LocalDate;
import java.util.List;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;

import com.example.demo.model.Customer;
import com.example.demo.repository.CustomerRepository;

@Controller
@RequestMapping("/customers")
public class CustomerController {

    private final CustomerRepository repository;

    public CustomerController(CustomerRepository repository) {
        this.repository = repository;
    }

    @GetMapping
    public String list(Model model) {
        model.addAttribute("customers", repository.findAll());
        return "customers/list";
    }

    @GetMapping("/new")
    public String showCreateForm(Model model) {
        model.addAttribute("customer", new Customer());
        return "customers/new";
    }

    @PostMapping
    public String createCustomer(@ModelAttribute Customer customer) {
        repository.save(customer);
        return "redirect:/customers";
    }
    
    @GetMapping("/edit/{id}")
    public String showEditForm(@PathVariable Long id, Model model) {
        Customer customer = repository.findById(id).orElseThrow();
        model.addAttribute("customer", customer);
        return "customers/edit";
    }

    // ★★★ メモを消さない安全な updateCustomer() ★★★
    @PostMapping("/update/{id}")
    public String updateCustomer(@PathVariable Long id, @ModelAttribute Customer form) {

        // DB の元データを取得
        Customer customer = repository.findById(id).orElseThrow();

        // 編集画面で変更できる項目だけ上書き
        customer.setName(form.getName());
        customer.setEmail(form.getEmail());
        customer.setPhone(form.getPhone());
        customer.setStatus(form.getStatus());
        customer.setNextActionDate(form.getNextActionDate());

        // ★ メモは上書きしない（form には入っていないため）
        // customer.setMemo(...) は呼ばない

        repository.save(customer);

        return "redirect:/customers";
    }
    
    @PostMapping("/delete/{id}")
    public String deleteCustomer(@PathVariable Long id) {
        repository.deleteById(id);
        return "redirect:/customers";
    }

    @GetMapping("/{id}")
    public String showDetail(@PathVariable Long id, Model model) {
        Customer customer = repository.findById(id).orElseThrow();
        model.addAttribute("customer", customer);
        return "customers/detail";
    }

    @PostMapping("/update-memo/{id}")
    public String updateMemo(@PathVariable Long id, String memo) {
        Customer customer = repository.findById(id).orElseThrow();
        customer.setMemo(memo);
        repository.save(customer);
        return "redirect:/customers/" + id;
    }

    @PostMapping("/update-next/{id}")
    public String updateNextAction(@PathVariable Long id,
                                   @RequestParam LocalDate nextActionDate) {
        Customer customer = repository.findById(id).orElseThrow();
        customer.setNextActionDate(nextActionDate);
        repository.save(customer);
        return "redirect:/customers/" + id;
    }

    @PostMapping("/update-status/{id}")
    public String updateStatus(@PathVariable Long id, @RequestParam String status) {
        Customer customer = repository.findById(id).orElseThrow();
        customer.setStatus(status);
        repository.save(customer);
        return "redirect:/customers/" + id;
    }

    @GetMapping("/search")
    public String searchCustomers(@RequestParam("keyword") String keyword, Model model) {

        // 検索実行（名前・メール・ステータスの部分一致）
        List<Customer> customers = repository
                .findByNameContainingOrEmailContainingOrStatusContaining(keyword, keyword, keyword);

        model.addAttribute("customers", customers);
        model.addAttribute("keyword", keyword);

        return "customers/list";
    }

    @GetMapping("/filter")
    public String filterByStatus(@RequestParam("status") String status, Model model) {

        List<Customer> customers = repository.findByStatus(status);

        model.addAttribute("customers", customers);
        model.addAttribute("selectedStatus", status);

        return "customers/list";
    }

}
