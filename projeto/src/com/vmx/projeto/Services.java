package com.vmx.projeto;

public class Services implements Icliente {
	protected String transacoes;
	protected int agencia;
	protected int numero;
	protected double saldo;
	
	public void sacar(double saldo) {
		this.saldo = saldo;
	}

	public void depositar(double saldo) {
		this.saldo = saldo;
	}

	public void transferir(double saldo, Conta contadestino) {
		this.saldo = saldo;
	}
	
	public void imprimirExtrato() {
		
	}
}
