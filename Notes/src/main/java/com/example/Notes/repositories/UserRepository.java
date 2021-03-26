package com.example.Notes.repositories;

import org.springframework.data.jpa.repository.JpaRepository;

import com.example.Notes.models.User;

public interface UserRepository extends JpaRepository<User, Long>{

		User findByEmail(final String email);
		
}
