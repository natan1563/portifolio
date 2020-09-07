#include <stdio.h>

int main() {
	int numFunc, numHoras;
	float recebHoras, salario;
	
	scanf("%d %d %f", &numFunc, &numHoras, &recebHoras);
	
	salario = recebHoras * numHoras;
	
	printf("NUMBER = %d\n", numFunc);
	printf("SALARY = U$ %.2f\n", salario);
	
	return 0;
}
