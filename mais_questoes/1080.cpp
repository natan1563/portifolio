#include <stdio.h>

int main(){
	int input = 0, controler1 = 1, maior = 0, position;
	
	for(controler1; controler1 <= 100; controler1++){
		
		scanf("%d", &input);
		
		if(maior < input){
			maior = input;
			position = controler1;
		}
	}
	
	printf("%d\n%d\n", maior, position);
	
	return 0;
}
