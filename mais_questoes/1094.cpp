#include <stdio.h>
#include <string.h>
int main() {
	
	int delimit = 0, input = 0, totalC = 0, totalR = 0, totalS = 0, totalCobaias = 0;
	double pctC = 0 , pctR = 0, pctS = 0;
	char type[2];
	
	scanf("%d", &delimit);
	
	for(int count = 0; count < delimit; count++){
		scanf("%d %s", &input, &type);
		
		if(strcmp(type, "C") == 0){
			totalC += input;
		}else if(strcmp(type, "R") == 0){
			totalR += input;
		}else if(strcmp(type, "S") == 0){
			totalS += input;
		}
		
	}
	
	totalCobaias = totalC + totalR + totalS;

	pctC = (100 * (float)totalC) / totalCobaias; 
	pctR = (100 * (float)totalR) / totalCobaias;
	pctS = (100 * (float)totalS) / totalCobaias;
	
	printf("Total: %d cobaias\nTotal de coelhos: %d\nTotal de ratos: %d\nTotal de sapos: %d\nPercentual de coelhos: %.2lf %%\nPercentual de ratos: %.2lf %%\nPercentual de sapos: %.2lf %%\n", totalCobaias, totalC, totalR, totalS, pctC, pctR, pctS);
	return 0;
}
