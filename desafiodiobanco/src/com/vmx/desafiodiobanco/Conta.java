package com.vmx.desafiodiobanco;

public abstract class Conta implements Iconta {
	
	private static int SEQUENCIAL = 1;
	private static final int AGENCIA_PADRAO = 1;
	
	protected int agencia;
	protected int numero;
	protected double saldo;
	protected double valor;
	
public Conta() {
	this.agencia(AGENCIA_PADRAO);
	this.numero(SEQUENCIAL++);
}	

public void agencia(int agenciaPadrao) {
	
}

public void numero(int i) {
	
}

public void saldo( double saldo) {
	
}

public void valor(double valor) {
	this.valor = valor;
}

public void sacar(double saldo,double valor) {
	this.saldo =- valor;
}

public void depositar(double saldo,double valor) {
	this.saldo =+ valor;
}

public void transferir(double saldo,double valor, Conta contadestino) {
	this.sacar(valor);
	contadestino.depositar(valor);
}


public int getAgencia() {
	return agencia;
}

public void setAgencia(int agencia) {
	this.agencia = agencia;
}

public int getNumero() {
	return numero;
}

public void setNumero(int numero) {
	this.numero = numero;
}

public double getSaldo() {
	return saldo;
}

public void setSaldo(double saldo) {
	this.saldo = saldo;
}

public double getValor() {
	return valor;
}

public void setValor(double valor) {
	this.valor = valor;
}

public static int getAgenciaPadrao() {
	return AGENCIA_PADRAO;
}

protected void ImprimirComuns() {
	System.out.println(String.format("Agencia: %d", this.agencia));
	System.out.println(String.format("Conta: %d", this.numero));
	System.out.println(String.format("Agencia: %d2F", this.saldo));
}
}