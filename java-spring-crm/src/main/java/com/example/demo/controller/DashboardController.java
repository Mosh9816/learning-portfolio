package com.example.demo.controller;

import java.time.DayOfWeek;
import java.time.LocalDate;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

import com.example.demo.repository.CustomerRepository;

@Controller
public class DashboardController {

    private final CustomerRepository repository;

    public DashboardController(CustomerRepository repository) {
        this.repository = repository;
    }

    @GetMapping("/dashboard")
    public String dashboard(Model model) {

        LocalDate today = LocalDate.now();

        // 今日のアクション数
        long todayCount = repository.countByNextActionDate(today);

        // 今週のアクション数
        LocalDate startOfWeek = today.with(DayOfWeek.MONDAY);
        LocalDate endOfWeek = today.with(DayOfWeek.SUNDAY);
        long weekCount = repository.countByNextActionDateBetween(startOfWeek, endOfWeek);

        // 期限切れ案件数（今日より前）
        long overdueCount = repository.countByNextActionDateBefore(today);

        // ステータス別件数
        long prospect = repository.countByStatus("見込み");
        long approach = repository.countByStatus("アプローチ中");
        long negotiation = repository.countByStatus("商談中");
        long estimate = repository.countByStatus("見積提示");
        long contract = repository.countByStatus("成約");
        long lost = repository.countByStatus("失注");

        model.addAttribute("todayCount", todayCount);
        model.addAttribute("weekCount", weekCount);
        model.addAttribute("overdueCount", overdueCount);

        model.addAttribute("prospect", prospect);
        model.addAttribute("approach", approach);
        model.addAttribute("negotiation", negotiation);
        model.addAttribute("estimate", estimate);
        model.addAttribute("contract", contract);
        model.addAttribute("lost", lost);

        return "dashboard";
    }
}
