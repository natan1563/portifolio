#include <stdio.h>


int main() {
	int count = 0;
	float nota = 0, media = 0, soma = 0;
	
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
	
	return 0;
}
