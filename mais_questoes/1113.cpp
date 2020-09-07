#include <stdio.h>


int main(){
	int inputX, inputY;
	
	scanf("%d %d", &inputX, &inputY);
	
	while(inputX != inputY){
		
		if(inputX > inputY){
			printf("Decrescente\n");
		}else{
			printf("Crescente\n");
		}
		
		scanf("%d %d", &inputX, &inputY);
	}
	
	return 0;
}
