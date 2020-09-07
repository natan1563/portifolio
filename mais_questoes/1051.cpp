#include <stdio.h>


int main() {
	float input = 0, calc = 0, juros = 0;
	
	scanf("%f", &input);
	
	if(input >= 0 and input <= 2000){
		printf("Isento\n");
	}else if(input > 2000 and input <= 3000){
		calc = (input - 2000) * 0.08;
	}else if(input > 3000 and input <= 4500){
		juros = input - 3000; 
		calc = (1000 * 0.08) + (juros * 0.18);
	}else if(input > 4500){
		juros = input - 4500;
		calc = (1000 * 0.08) + (1500 * 0.18) + (juros * 0.28);
	}
	
	if(input > 2000){
	printf("R$ %.2f\n", calc, juros);
	}
	
	return 0;
}
