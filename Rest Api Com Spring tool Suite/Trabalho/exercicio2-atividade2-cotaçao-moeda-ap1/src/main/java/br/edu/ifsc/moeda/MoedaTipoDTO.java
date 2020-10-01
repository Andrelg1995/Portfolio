package br.edu.ifsc.moeda;

public class MoedaTipoDTO {

	private double valor;
	private String TipoOperacao;
	private double dc;
	private double dp;
	private double dx;
	private double dt;
	private double eu;
	private double ou;
	
	
	
	
	
	
	public MoedaTipoDTO(double valor, String tipoOperacao, double dc, double dp, double dx, double dt, double eu,
			double ou) {
		super();
		this.valor = valor;
		TipoOperacao = tipoOperacao;
		this.dc = dc;
		this.dp = dp;
		this.dx = dx;
		this.dt = dt;
		this.eu = eu;
		this.ou = ou;
	}



	public MoedaTipoDTO() {
		super();
	
	
	
	
}



	public double getValor() {
		return valor;
	}



	public void setValor(double valor) {
		this.valor = valor;
	}



	public String getTipoOperacao() {
		return TipoOperacao;
	}



	public void setTipoOperacao(String tipoOperacao) {
		TipoOperacao = tipoOperacao;
	}



	public double getDc() {
		return dc;
	}



	public void setDc(double dc) {
		this.dc = dc;
	}



	public double getDp() {
		return dp;
	}



	public void setDp(double dp) {
		this.dp = dp;
	}



	public double getDx() {
		return dx;
	}



	public void setDx(double dx) {
		this.dx = dx;
	}



	public double getDt() {
		return dt;
	}



	public void setDt(double dt) {
		this.dt = dt;
	}



	public double getEu() {
		return eu;
	}



	public void setEu(double eu) {
		this.eu = eu;
	}



	public double getOu() {
		return ou;
	}



	public void setOu(double ou) {
		this.ou = ou;
	}
}
