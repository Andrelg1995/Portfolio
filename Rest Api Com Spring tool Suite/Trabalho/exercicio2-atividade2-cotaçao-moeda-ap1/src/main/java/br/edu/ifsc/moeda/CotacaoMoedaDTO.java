package br.edu.ifsc.moeda;

public class CotacaoMoedaDTO {
	
	private String sigla;
	private Double valorCompra;
	private Double valorVenda;
	
	
	
	
	
	
	
	
	
	
	public CotacaoMoedaDTO(String sigla, Double valorCompra, Double valorVenda) {
		super();
		this.sigla = sigla;
		this.valorCompra = valorCompra;
		this.valorVenda = valorVenda;
	}


	public  CotacaoMoedaDTO() {
		super();
		
	}


	public String getSigla() {
		return sigla;
	}


	public void setSigla(String sigla) {
		this.sigla = sigla;
	}


	public Double getValorCompra() {
		return valorCompra;
	}


	public void setValorCompra(Double valorCompra) {
		this.valorCompra = valorCompra;
	}


	public Double getValorVenda() {
		return valorVenda;
	}


	public void setValorVenda(Double valorVenda) {
		this.valorVenda = valorVenda;
	}
	
	
	

}
