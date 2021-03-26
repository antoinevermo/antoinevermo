package com.example.Notes.configs;

import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;
import org.springframework.security.crypto.bcrypt.BCryptPasswordEncoder;
import org.springframework.web.servlet.config.annotation.ViewControllerRegistry;
import org.springframework.web.servlet.config.annotation.WebMvcConfigurer;

@Configuration
public class PageConfig implements WebMvcConfigurer {

		@Bean
		public BCryptPasswordEncoder passwordEncoder() {
			BCryptPasswordEncoder byCryptPasswordEncoder = new BCryptPasswordEncoder();
		
			return byCryptPasswordEncoder;
		}
		
		@Override
		public void addViewControllers(ViewControllerRegistry registry) {
			registry.addViewController("/notes").setViewName("notes");
			registry.addViewController("/").setViewName("notes");
			registry.addViewController("/login").setViewName("login");
		}
		
		}

