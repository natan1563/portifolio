#include <stdio.h>

int main(){
	int eixoX = 0, eixoY = 0;
	
	scanf("%d %d", &eixoX, &eixoY);
	
	while(eixoX != 0 && eixoY != 0){
		if(eixoX > 0 && eixoY > 0){
			printf("primeiro\n");
		}else if(eixoX < 0 && eixoY > 0){
			printf("segundo\n");
		}else if(eixoX < 0 && eixoY < 0){
			printf("terceiro\n");
		}else{
			printf("quarto\n");
		}
		scanf("%d %d", &eixoX, &eixoY);
	}
	
	return 0;
}
