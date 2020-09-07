#include <stdio.h>
#include <stdlib.h>


int main(void) {
	int nota1, nota2, nota3, nota4;
	int media;
	
	printf("****************Bem vindo ao sistema de medias*****************\n");
	
	printf("Digite o primeiro valor: ");
	scanf("%d\n", &nota1);
	
	printf("Digite o segundo valor: ");
	scanf("%d\n", &nota2);
	
	printf("Digite o terceiro valor: ");
	scanf("%d\n", &nota3);
	
	printf("Digite o quarto valor: ");
	scanf("%d\n", &nota4);
	
	printf("Sua media final e: %d", media = (nota1 + nota2 + nota3 + nota4) / 4);
	
	system("pause");
}
