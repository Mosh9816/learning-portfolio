package com.example.demo.repository;

import java.time.LocalDate;
import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;

import com.example.demo.model.Customer;

public interface CustomerRepository extends JpaRepository<Customer, Long> {

    // 今日のアクション数
    long countByNextActionDate(LocalDate date);

    // 今週のアクション数
    long countByNextActionDateBetween(LocalDate start, LocalDate end);

    // 期限切れ案件数（今日より前）
    long countByNextActionDateBefore(LocalDate date);

    // ステータス別件数
    long countByStatus(String status);

    // 🔍 検索機能（名前 or メール or ステータス）
    List<Customer> findByNameContainingOrEmailContainingOrStatusContaining(
        String name, String email, String status
    );

    //フィルタ機能(ステータスで絞込み)
    List<Customer> findByStatus(String status);

}
