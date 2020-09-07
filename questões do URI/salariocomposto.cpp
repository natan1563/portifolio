#include <stdio.h>

int main() {
	
	float salario, newSalario, reajuste;
	
	scanf("%f", &salario);
	
	
	if(salario > 0 and salario <= 400){
		newSalario = salario * 0.15 + salario;
		reajuste = newSalario - salario;
		printf("Novo salario: %.2f\n", newSalario);
		printf("Reajuste ganho: %.2f\n", reajuste);
		printf("Em percentual: 15 %%\n");
		
	}else if(salario > 400 and salario <= 800){
		newSalario = salario * 0.12 + salario;
		reajuste = newSalario - salario;
		printf("Novo salario: %.2f\n", newSalario);
		printf("Reajuste ganho: %.2f\n", reajuste);
		printf("Em percentual: 12 %%\n");
		
	}else if(salario > 800 and salario <= 1200) {
		newSalario = salario * 0.10 + salario;
		reajuste = newSalario - salario;
		printf("Novo salario: %.2f\n", newSalario);
		printf("Reajuste ganho: %.2f\n", reajuste);
		printf("Em percentual: 10 %%\n");
		
	}else if(salario > 1200 and salario <= 2000){
		newSalario = salario * 0.07 + salario;
		reajuste = newSalario - salario;
		printf("Novo salario: %.2f\n", newSalario);
		printf("Reajuste ganho: %.2f\n", reajuste);
		printf("Em percentual: 7 %%\n");
		
	}else{
		newSalario = salario * 0.04 + salario;
		reajuste = newSalario - salario;
		printf("Novo salario: %.2f\n", newSalario);
		printf("Reajuste ganho: %.2f\n", reajuste);
		printf("Em percentual: 4 %%\n");
		
	}
	
	return 0;
}
