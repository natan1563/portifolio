#include <stdio.h>
#include <stdlib.h>


int main(void) {
	
	
	int a = 5;
	
	//Imprimindo variavel A
	printf("Por padrao, nosso primeiro valor eh igual a: %d \n\n", a);
	
	printf("Porem, criaremos uma soma dinamica para atribuir um novo valor \n\n");
	
	int b = a;
	
	printf("Digite o valor que voce deseja atribuir: ");
	scanf("%d", &a);
	
	int resultado = b + a;
	
	printf("O resultado eh: %d ", resultado);
	
	if(resultado >= 100 / resultado){
		
		printf("peidei\n");
	
	} else{
		printf("ferrou negao\n");
	}
	
	
	system("pause");

}
