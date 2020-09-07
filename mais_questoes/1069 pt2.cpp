#include <stdio.h>
#include <string.h>


int main(){
	char dima[1001];
	int input, j = 0, crazyDiamond = 0;
	
	scanf("%d",&input);
	
	for(int count = 1; count <= input; count++){
		scanf("%s", &dima);
		j = 0, crazyDiamond = 0;
		
		while(j < strlen(dima)){
			
			if(dima[j] == '\0'){
				break;
			}else if(dima[j] == '<'){
				
				for(int k = j; k < strlen(dima); k++){
					if(dima[k] == '\0'){
						break;
					}else if(dima[k] == '>'){
						crazyDiamond++;
						dima[k] = '.';
						break;
					}
				}
			}
		}
		
		printf("%d\n", crazyDiamond);
	}
}
