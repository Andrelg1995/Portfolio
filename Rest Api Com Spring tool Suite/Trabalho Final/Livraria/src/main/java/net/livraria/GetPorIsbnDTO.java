package net.livraria;

public class GetPorIsbnDTO {
	
	private String titulo;
	private String autor;
	private String editora;
	private Double preço;
	
	
	public GetPorIsbnDTO( String titulo, String autor, String editora, Double preço) {
		super();
	
		this.titulo = titulo;
		this.autor = autor;
		this.editora = editora;
		this.preço = preço;
	}



	public GetPorIsbnDTO () {
		super();
	}






	public String getTitulo() {
		return titulo;
	}



	public void setTitulo(String titulo) {
		this.titulo = titulo;
	}



	public String getAutor() {
		return autor;
	}



	public void setAutor(String autor) {
		this.autor = autor;
	}



	public String getEditora() {
		return editora;
	}



	public void setEditora(String editora) {
		this.editora = editora;
	}



	public Double getPreço() {
		return preço;
	}



	public void setPreço(Double preço) {
		this.preço = preço;
	}
	
}
