#include <stdio.h>


int main() {
	
	float valor;
	int valFilter, calculo1, calculo2, calculo3, calculo4, calculo5, calculo6, moeda1, moeda2, moeda3, moeda4, moeda5, moeda6;
	 
	scanf("%f", &valor);
	
	valFilter = valor;
	
	calculo1 = valFilter / 100; 
	calculo2 = (valFilter % 100) / 50;
	calculo3 = (valFilter % 100 % 50) / 20;
	calculo4 = (valFilter % 100 %50 % 20) / 10;
	calculo5 = (valFilter % 100 %50 %20 %10) / 5;
	calculo6 = (valFilter % 100 %50 %20 %10 %5) / 2;
	
	//DESISTOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO
	valFilter = calculo6 - (calculo6 * 2);
	moeda1 = (valFilter / 1);
	valFilter = valFilter - (moeda1 * 1);
	moeda2 = valFilter / 0.50;
	valFilter = valFilter - (moeda2 * 0.50);
	moeda3 = valFilter / 0.25;
	valFilter = valFilter - (moeda3 * 0.25);
	moeda4 = valFilter / 0.10;
	valFilter = valFilter - (moeda4 * 0.10);
	moeda5 = valFilter / 0.05;
	valFilter = valFilter - (moeda5 * 0.05);
	moeda6 = valFilter / 0.01;
	valFilter = valFilter - (moeda6 * 0.01);
	
	
	/*moeda1 = (valor % 100 %50 %20 %10 %5 %2);
	moeda2 = (valor % 100 %50 %20 %10 %5 %2 %50);
	moeda3 = (valor % 100 %50 %20 %10 %5 %2 %50 %20);
	moeda4 = (valor % 100 %50 %20 %10 %5 %2 %50 %20 %10);
	moeda5 = (valor % 100 %50 %20 %10 %5 %2 %50 %20 %10 %5);
	moeda6 = (valor % 100 %50 %20 %10 %5 %2 %50 %20 %10 %5 %2);
	*/
	printf("NOTAS:\n%d nota(s) de R$ 100.00\n%d nota(s) de R$ 50.00\n%d nota(s) de R$ 20.00\n%d nota(s) de R$ 10.00\n%d nota(s) de R$ 5.00\n%d nota(s) de R$ 2.00\nMOEDAS:%d moeda(s) de R$ 1.00\n%d moeda(s) de R$ 0.50\n%d moeda(s) de R$ 0.20\n%d moeda(s) de R$ 0.10\n%d moeda()s) de R$ 0.05\n%d moeda(s) de R$ 0.01\n ", calculo1, calculo2, calculo3, calculo4, calculo5, calculo6, moeda1, moeda2, moeda3, moeda4, moeda5, moeda6);
	
	return 0;
	
}
