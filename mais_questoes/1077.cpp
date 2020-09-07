#include <stdio.h>
#include <string.h>
#define MAXTAM 300
int main() {
	char letras[MAXTAM], simbol[MAXTAM], arm[MAXTAM], main[MAXTAM];
	int input, i, len, le, si;
	
	scanf("%d", &input);
	
	for(int count = 0; count < input; count++){
		scanf("%s", arm);
		i = 0;
		le = 0;
		si = 0;
		len = strlen(arm) - 1;
		while(len >= i){
			if(arm[len] == '(' or arm[len] == ')'){
				goto stop;
			}else{
				if(arm[len] == '-' or arm[len] == '+' or arm[len] == '*' or arm[len] == '/' or arm[len] == '^'){
					simbol[si] = arm[len];
					si++;
				}else{
					letras[le] = arm[len];
					//printf("Letras: %s\n", letras);
					le++;
				}
			}
			stop:;
			len--;
		}
			
		
	printf("Simbolos: %s\nLetras: %s\n", simbol, letras);
	}
}









