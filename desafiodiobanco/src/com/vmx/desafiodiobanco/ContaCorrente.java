package com.vmx.desafiodiobanco;


public class ContaCorrente extends Conta {

	public void imprimirExtrato() {
		System.out.println("***imprimindo extrato conta corrente***");
		super.ImprimirComuns();
	}

	@Override
	public void sacar(double valor) {
		// TODO Auto-generated method stub
		
	}

	@Override
	public void depositar(double valor) {
		// TODO Auto-generated method stub
		
	}

	@Override
	public void transferir(double valor, Conta contadestino) {
		// TODO Auto-generated method stub
		
	}
}
