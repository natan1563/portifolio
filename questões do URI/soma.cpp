#include <stdio.h>
#include <stdlib.h>

int main() {
	
	int value1, value2, soma = 0;
	float media;
	
	
		soma = 0;
		scanf("Digite o primeiro valor: %d", &value1);
		scanf("Digite o segundo valor: %d", &value2);
		
		soma = value1 + value2;
		media = soma / 2;
		
		if(media > 5){
			printf("Parabens voce passou!!\n");
		}
	
	
	return 0;
}
