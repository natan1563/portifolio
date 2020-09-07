#include <stdio.h>

int main() {
	
	int Dig[9], arm[9], result[2], count = 0, j, aux, quoci, resto, control;
	
	for(int k = 0; k < 11; k++){
			scanf("%d", &Dig[k]);
		}
		
	for(int i = 1; i <= 2; i++){
		
		count = 0;
		aux = 0;
		quoci = 0;
		resto = 0;
		
		if(i > 1){
			j = 11;
			control = 10;
		}else{
			j = 10;
			control = 9;
		}
		
		for(j; j > 1; j--){
			arm[count] = Dig[count] * j;
			count++;
		}
		count = 0;
		for(int l = 0; l < control; l++){
			aux+= arm[l];
			
			if(l == control -1){
				quoci = aux % 11;
				resto = 11 - quoci;
				
				if(resto < 2){
					resto = 0;
				}
				result[count] = resto;
				count++;
			}
			
		}
	}
	aux = 0;
	for(int i = 0; i < 11; i++){
		aux+=Dig[i];	
	}
	
	if(Dig[10] == result[0] and Dig[11] == result[1]){
		printf("sim\n%d", aux);
	}else{
		printf("nao\n");
	}
	printf("\n");
	return 0;
}
