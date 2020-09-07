#include <stdio.h>
#include <conio.h>

int main() {
	
	char name[20];
	double salarioFix, totalVenda, salarioTotal;
	
	scanf("%s %lf %lf", &name, &salarioFix, &totalVenda);
	
	salarioTotal = (totalVenda * 0.15) + salarioFix;
	
	printf("TOTAL = R$ %.2lf\n", salarioTotal);
	
	return 0;
}
