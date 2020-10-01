package net.livraria;



import java.util.ArrayList;


import java.util.List;

public class LivroDataSoucer{
	
	private static List<Livro> listaLivros = new ArrayList<>();
	// trocar o isbn quando professor responder
	public static void criarLista() { 
		listaLivros.add(new Livro(100, 9788562409882L, "A garota do lago","Charlie Donlea","Faro Editorial", 12.90));
		
		listaLivros.add(new Livro(101, 9788532530783L, "Harry Potter e a pedra filosofal","J.K. Rowling", "Rocco", 29.90));
		
		listaLivros.add(new Livro(102, 9788566636833L, "Em Algum Lugar nas Estrelas: Uma oportunidade de voltarmos à infância", "Clare Vanderpool", "Darkside", 43.91));
		
		listaLivros.add(new Livro(103, 9788542614220L, "The Irregular at Magic High School  Volume 3", "Tsutomu Satou", "Yen Press", 69.39));
		
		listaLivros.add(new Livro(104, 9781646090440L, "TThe Misfit of Demon King Academy 03", "Shu", "Square Enix Manga", 63.12));
}
	
	
	//logica regras da aplicaçao gerar lista
	public static List<Livro> getListaLivros() {
		return listaLivros;
	}
	
	////logica regras da aplicaçao adicionar livro
	public static void add(Livro Livro) {
		listaLivros.add(Livro);
	}	
	
	public static void setListaLivro(List<Livro> listaLivros) {
		LivroDataSoucer.listaLivros = listaLivros;
	}
	
	//logica regras da aplicaçao buscar por isbn
	public static Livro getPorIsbn(long isbn) {
		for (Livro livro: listaLivros) {
			if (livro.getIsbn() == isbn) {
				return livro;
			}
		}
		return null;
	}
	
	
	
	//logica regras da aplicaçao buscar por autor
	public static Livro getPorautor(String autor) {
		for (Livro livro: listaLivros) {
			if (livro.getAutor().equalsIgnoreCase(autor))  {
				return livro;
			}
		}
		return null;
	}
	
	//logica regras da aplicaçao buscar por titulo
	public static Livro getPortitulo(String titulo) {
		for (Livro livro: listaLivros) {
			if (livro.getTitulo().equalsIgnoreCase(titulo))  {
				return livro;
			}
		}
		return null;
	}

	
	public static List<Livro>  getAll() {
		return listaLivros;
	}
	

	

	//funcionado dto por insb
	public static  GetPorIsbnDTO   LivroDTO(long isbn) {
		GetPorIsbnDTO LivroDTO = null;
		
	for (Livro livro: listaLivros){
		if(livro.getIsbn() == isbn) {
		 LivroDTO = new GetPorIsbnDTO(livro.getTitulo(),livro.getAutor(),livro.getEditora(),livro.getPreço());
		 return  LivroDTO;
		}
	}
	LivroDTO = new GetPorIsbnDTO("Nao encontrado","Nao encontrado","Nao encontrado",0.0);
	return LivroDTO;
	
}

	
	
	//taxa
	
	//reajustar os preços de um livro por id e taxa
	public static void reajustarPrecoId(int id ,int taxa) {
		
		for(Livro livro: listaLivros) {
			 if(livro.getId() == id) {
			
			livro.reajustarPreco(taxa);	
				
				
			}
			
		}
		
	}
	
	
	//reajustar preço todos os livro
	public static void reajustarPreco(int taxa) {
		
		for(Livro livro: listaLivros) {
			livro.reajustarPreco(taxa);
			
			}
		}
}
