#include <stdio.h>

int main() {
	
	int numFunc, horasTrab;
	float ganho, salario;
	
	scanf("%d %d %f", &numFunc, &horasTrab, &ganho);
	
	salario = ganho * horasTrab;
	
	printf("NUMBER = %d\n", numFunc);
	printf("SALARY = U$ %.2f\n", salario);
	
	return 0;
}
