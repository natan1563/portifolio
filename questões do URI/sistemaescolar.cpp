#include <stdio.h>


int main() {
	
	float nota1, nota2, nota3, nota4, media;
	
	scanf("%f %f %f %f", &nota1, &nota2, &nota3, &nota4);
	
	
	printf("Media: %.1f\n", media = (nota1*2 + nota2*3 + nota3*4 + nota4*1)/10);	
	
	if(media >= 7){
	
		printf("Aluno aprovado.\n");
	
	}else if(media < 5){
		
		printf("Aluno reprovado.\n");
		
	}else if(media >= 5 and media < 7){
		
		printf("Aluno em exame.\n");
		
		float notaExame;
		
		scanf("%f", &notaExame);
		
		printf("Nota do exame: %.1f\n", notaExame);
		
		media = (media + notaExame) / 2;
		
		if(media >= 5){
			
			printf("Aluno aprovado.\nMedia final: %.1f\n", media);
			
			
		}else{
			
			printf("Aluno reprovado.\nMedia final: %.1f\n", media);
			
		}
		
		
	}
	
	
	return 0;
}
