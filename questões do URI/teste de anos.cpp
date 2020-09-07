#include <stdio.h>

//Filtro de idade

int main() {
	
	int Nday = 0, Nmonth = 0, Nyear = 0, Yday = 0, Ymonth = 0, Yyear = 0, day = 0, month = 0, year = 0;
	
	printf("Digite sua data de nascimento (dd/mm/YY): ");
	scanf("%d/%d/%d", &Nday, &Nmonth, &Nyear);
	printf("Digite o ano atual (dd/mm/YY): ");
	scanf("%d/%d/%d", &Yday, &Ymonth, &Yyear);
	
	day = Yday - Nday;
	month = Ymonth - Nmonth;
	year = Yyear - Nyear;
	
	if(day < 1){
		month--;
		day+=30;
	}
	if(month < 1){
		year--;
		month+=12;
	}
	
	printf("Você tem %d dias %d meses e %d anos\n", day, month, year);
	
	return 0;
}
