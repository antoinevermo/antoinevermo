package com.example.Notes;

import org.springframework.boot.CommandLineRunner;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.context.annotation.Bean;

import com.example.Notes.models.Role;
import com.example.Notes.repositories.RoleRepository;

@SpringBootApplication
public class NotesApplication {

	public static void main(String[] args) {
		SpringApplication.run(NotesApplication.class, args);
	}
	
	@Bean
	CommandLineRunner init(RoleRepository roleRepository) {

	    return args -> {

	        Role adminRole = roleRepository.findByRole("ADMIN");
	        if (adminRole == null) {
	            Role newAdminRole = new Role();
	            newAdminRole.setRole("ADMIN");
	            roleRepository.save(newAdminRole);
	        }

	        Role userRole = roleRepository.findByRole("USER");
	        if (userRole == null) {
	            Role newUserRole = new Role();
	            newUserRole.setRole("USER");
	            roleRepository.save(newUserRole);
	        }
	    };

	}

}


