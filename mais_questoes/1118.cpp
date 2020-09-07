#include <stdio.h>

int main() {
	int count, menu;
	float nota = 0, media = 0, soma = 0;
	
	do{
		
	 count = 0;
	 soma = 0;
	 
	 while(count < 2){
	 	
	 scanf("%f", &nota);
	
		if(nota < 0 || nota > 10){
			printf("nota invalida\n");
		}else{
			soma+=nota;
			count++;
		}
	 }
		
	printf("media = %.2f\n", soma / 2);
	
	printf("novo calculo (1-sim 2-nao)\n");
	scanf("%d", &menu);
	
	while(menu < 1 || menu > 2){
	printf("novo calculo (1-sim 2-nao)\n");
	scanf("%d", &menu);
	}
	
	}while(menu == 1);
	
	
	
	return 0;
}
