package com.example.Notes.repositories;

import org.springframework.data.jpa.repository.JpaRepository;

import com.example.Notes.models.Role;

public interface RoleRepository extends JpaRepository<Role, Long> {

		Role findByRole(final String role);
}
