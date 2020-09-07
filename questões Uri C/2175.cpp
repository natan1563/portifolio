#include <stdio.h>

void comp(float num1, float num2, float num3){
	
	if(num1 < num2 and num1 < num3){
		printf("Otavio\n");
	}else if(num2 < num1 and num2 < num3){
		printf("Bruno\n");
	}else if(num3 < num1 and num3 < num2){
		printf("Ian\n");
	}else{
		printf("Empate\n");
	}
return;
}

int main(){
	
	float num1, num2, num3;
	
	scanf("%f %f %f", &num1, &num2, &num3);
	
	comp(num1, num2, num3);
	
	return 0;
}
