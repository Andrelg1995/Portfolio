package net.livraria;



public class Livro {
	// variaveis declaradas
	private int id;
	private long isbn;
	private String titulo;
	private String autor;
	private String editora;
	private Double preço;
	
	//costrutor criado 

	public Livro() {
		
	}


	public Livro(int id, long isbn, String titulo, String autor, String editora, Double preço) {
		super();
		this.id = id;
		this.isbn = isbn;
		this.titulo = titulo;
		this.autor = autor;
		this.editora = editora;
		this.preço = preço;
	}

// gets e setings feitos
	public int getId() {
		return id;
	}


	public void setId(int id) {
		this.id = id;
	}


	public long getIsbn() {
		return isbn;
	}


	public void setIsbn(long isbn) {
		this.isbn = isbn;
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

	public void reajustarPreco(int taxa) {
		double aumento = preço + (preço * taxa / 100.0);
		setPreço(aumento);
		
	}

}
