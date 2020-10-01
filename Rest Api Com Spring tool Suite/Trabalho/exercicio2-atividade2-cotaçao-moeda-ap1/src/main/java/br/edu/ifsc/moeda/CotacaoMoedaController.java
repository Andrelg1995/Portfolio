package br.edu.ifsc.moeda;

import java.util.ArrayList;
import java.util.List;

import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class CotacaoMoedaController {

	

	
	//mostrar cotaçao do valor pra todas as moedas 
	
	@RequestMapping(value = "/conver_dto/{valor}/{tipoOperacao}", method = RequestMethod.GET)
	public  MoedaTipoDTO calcularCotacaoMoedas(
			@PathVariable(name = "valor") double valor, 			
			@PathVariable(name = "tipoOperacao") String tipoOperacao) {
	
		MoedaTipoDTO moedaDTO = new MoedaTipoDTO();
		
		moedaDTO.setValor(valor);
		moedaDTO.setTipoOperacao(tipoOperacao);
		
		
		for (Moeda moeda: MoedaDataSource.getAll()) {
            switch (moeda.getSigla()) {
                   case "DC":
                            if (tipoOperacao.equalsIgnoreCase("venda")) moedaDTO.setDc(valor / moeda.getValorVenda());
                            else  moedaDTO.setDc(valor * moeda.getValorCompra());
                            break;
                   
                   case "DP":
                            if (tipoOperacao.equalsIgnoreCase("venda")) moedaDTO.setDp(valor / moeda.getValorVenda());
                           else moedaDTO.setDp(valor * moeda.getValorCompra());
                           break;
                   
                   case "DX":
                       if (tipoOperacao.equalsIgnoreCase("venda")) moedaDTO.setDx(valor / moeda.getValorVenda());
                      else moedaDTO.setDx(valor * moeda.getValorCompra());
                      break;
                   
                   case "DT":
                       if (tipoOperacao.equalsIgnoreCase("venda")) moedaDTO.setDt(valor / moeda.getValorVenda());
                      else moedaDTO.setDt(valor * moeda.getValorCompra());
                      break;
               
                   case "EU":
                       if (tipoOperacao.equalsIgnoreCase("venda")) moedaDTO.setEu(valor / moeda.getValorVenda());
                      else moedaDTO.setEu(valor * moeda.getValorCompra());
                      break;
                      
                   case "OU":
                       if (tipoOperacao.equalsIgnoreCase("venda")) moedaDTO.setOu(valor / calcularPrecoVendaOuro(moeda));
                      else moedaDTO.setOu(valor * moeda.getValorCompra());
                      break;
                   
            }
     }
		
		return moedaDTO; 
	
		
		
	}
	
	
	
	//moeda so mostra o valor de venda e de compra 
	
	@RequestMapping(value = "/mostrar_moeda")
	public List<CotacaoMoedaDTO> obterCotacaoMoedas() {
        List<CotacaoMoedaDTO> resultado = new ArrayList<>();
        for (Moeda moeda: MoedaDataSource.getAll()) {
                 CotacaoMoedaDTO moedaDTO = new CotacaoMoedaDTO( moeda.getSigla(), moeda.getValorCompra(),moeda.getValorVenda() );
                 resultado.add(moedaDTO);
        }
        return resultado;
	
	}
	
	
	
	
	
	
	
	
	//mostra o faz o cambio pelo tipo de moeda

	@RequestMapping(value = "/converter_moeda/{valor}/{tipoMoeda}/{tipoOperacao}", method = RequestMethod.GET)
	public Double converterMoeda(
			@PathVariable(name = "valor") double valor, 
			@PathVariable(name = "tipoMoeda") String tipoMoeda, 
			@PathVariable(name = "tipoOperacao") String tipoOperacao) {
		
					Moeda moeda = MoedaDataSource.get(tipoMoeda);
		
		double cotacao = 0.0;
		
		if (moeda != null) {
			if (tipoOperacao.equalsIgnoreCase("venda")) {
				if (!tipoMoeda.equalsIgnoreCase("OU")) {
					cotacao = valor / moeda.getValorVenda();
				} else {
					cotacao = valor / calcularPrecoVendaOuro(moeda);
				}
			} else {
				cotacao = valor * moeda.getValorCompra();
			}
		}
		
		return cotacao;
	}
	
	private double calcularPrecoVendaOuro(Moeda moeda) {
		double precoVendaOuro = moeda.getValorCompra() + 
				(moeda.getValorCompra() * moeda.getValorVenda() / 100);
		return precoVendaOuro;
	}
	
}
