package com.example.Notes.repositories;

import org.springframework.data.jpa.repository.JpaRepository;

import com.example.Notes.models.Notes;

public interface NotesRepository extends JpaRepository<Notes, Long> {
	
	Notes findByTitle(final String title);
}