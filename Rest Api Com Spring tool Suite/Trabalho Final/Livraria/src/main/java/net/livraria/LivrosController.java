package net.livraria;

import java.util.ArrayList;

import java.util.List;

import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.http.MediaType;

@RestController
public class LivrosController {
	//consultar a lista funcionando tudo certinho .
	@RequestMapping(value = "/livros")
	public List<Livro> getlivro() {
		return LivroDataSoucer.getListaLivros();
	}
	//adicionar livros esta funcionando kk amem
	//logica regras da aplicaçao adicionar livro
	@RequestMapping(value = "/novolivro", method = RequestMethod.POST,
	consumes = MediaType.APPLICATION_JSON_VALUE,
	produces = MediaType.APPLICATION_JSON_VALUE)
	public Livro add(@RequestBody Livro Livro) {
	LivroDataSoucer.add(Livro);
		return Livro;
		}	
	//consulta por isbn funcionando certinho logica no datasoucer
	@RequestMapping(value = "/consulta_isbn/{isbn}", method = RequestMethod.GET)
	public Livro getPorIsbn(
	@PathVariable("isbn") long isbn) {
		return LivroDataSoucer.getPorIsbn(isbn);
	}
	//consulta por autor funcionando logica no datasoucer
	@RequestMapping(value = "/consulta_autor/{autor}", method = RequestMethod.GET)
	public Livro getPorAutor(
			@PathVariable("autor") String autor) {
		return LivroDataSoucer.getPorautor(autor);
	}
	//consulta por autor funcionando logica no datasoucer
	@RequestMapping(value = "/consulta_titulo/{titulo}", method = RequestMethod.GET)
	public Livro getPorTitulo(
			@PathVariable("titulo") String titulo) {
		return LivroDataSoucer.getPortitulo(titulo);
	}
	//DTOs
			// funcionou muito bem mostrar livros titulo autor editora e preço
			@RequestMapping(value = "/mostrar_livros")
			public  List<DTO> obterGetAll() {
	       List<DTO> resultado = new ArrayList<>();
	       for (Livro livro: LivroDataSoucer.getAll()) {
	       	DTO livroDTO = new DTO( livro.getTitulo(),livro.getAutor(),livro.getEditora(),livro.getPreço() );
	                resultado.add(livroDTO);
	        }
	        return resultado;
	}   
			//funcionado DTO por INSB
			@RequestMapping(value = "/dto_isbn/{isbn}", method = RequestMethod.GET)
			public  GetPorIsbnDTO LivroDTO(
					@PathVariable("isbn") long isbn) {
				return LivroDataSoucer.LivroDTO(isbn);
			}		
			
	//taxas		
				
			
			//ajusta o preço de todos os livros
			@RequestMapping(value = "/taxalivros/{taxa}", method = RequestMethod.GET)
			public void  reajustarPreco(
					@PathVariable("taxa") int taxa) {
				 LivroDataSoucer.reajustarPreco(taxa);
			}	
			

			//ajusta o preço do livro por id e taxa
			@RequestMapping(value = "/livosidtaxa/{id}/{taxa}", method = RequestMethod.GET)
			public void  reajustarPrecoId(
					@PathVariable("id") int id,
					@PathVariable("taxa") int taxa) {
				 LivroDataSoucer.reajustarPrecoId(id, taxa);
			}	
			

			
			
	}			