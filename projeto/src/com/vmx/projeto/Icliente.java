package com.vmx.projeto;

public interface Icliente {
	
	void sacar(double valor);

	void depositar(double valor);

	void transferir(double valor, Conta contadestino);
	
	void imprimirExtrato();
}
