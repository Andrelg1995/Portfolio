package net.livraria;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;



@SpringBootApplication
public class LivrariaApplication {

	public static void main(String[] args) {
		
		LivroDataSoucer.criarLista();
		
		
		SpringApplication.run(LivrariaApplication.class, args);
	}

}
