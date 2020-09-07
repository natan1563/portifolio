#include <stdio.h>

int main(){
	
	double num1 = 0, num2 = 0;
	
	while(scanf("%lf %lf", &num1, &num2) == 2){
	
	
	if((num1 == 0) && (num2 == 0)){
		
		printf("Origem\n");
		
	}else if((num1 == 0) && (num2 != 0)){
		
		printf("Eixo Y\n");
		
	}else if((num2 == 0) && (num1 != 0)){
		
		printf("Eixo X\n");
		
	}else if((num1 > 0) && (num2 > 0)){
		
		printf("Q1\n");
		
	}else if((num1 < 0) && (num2 > 0)){
		
		printf("Q2\n");
		
	}else if((num1 < 0) && (num2 < 0)){
		
		printf("Q3\n");
		
	}else if((num1 > 0) && (num2 < 0)){
		
		printf("Q4\n");
		
	}
	}
	
	return 0;		

}
