#include <stdio.h>

int main(){
	
	int input1 = 0, input2 = 0, maior, menor, arm = 0;
	
	scanf("%d %d", &input1, &input2);
	
	if(input1 > input2){
		maior = input1;
		menor = input2;
	}else{
		maior = input2;
		menor = input1;
	}
	menor+=1;
	while(menor < maior){
		
		if(menor % 2 != 0){
			arm++;			
		}
		
		menor++;
	}
	
	printf("%d\n", arm);
	
	return 0;
}
