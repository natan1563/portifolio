#include <stdio.h>

int main(){
	
	int input = 0, count = 1, par = 0, impar = 0, posi = 0, nega = 0;
	
	while(count <= 5){
		
		scanf("%d", &input);
		
		if(input % 2 == 0){
			par++;
		}else if(input % 2 != 0){
			impar++;
		}
		
		if(input > 0){
			posi++;
		}else if(input < 0){
			nega++;
		}
		
		count++;
	}
	
	printf("%d valor(es) par(es)\n", par);
	printf("%d valor(es) impar(es)\n", impar);
	printf("%d valor(es) positivo(s)\n", posi);
	printf("%d valor(es) negativo(s)\n", nega);
	
	return 0;
}
