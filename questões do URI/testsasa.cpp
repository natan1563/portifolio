#include<stdio.h>
#include<string.h>
int main(){
	int n,abre=0,fecha=0,j=0,k=0,i=0,diamantes;
	char mina[1001];
	scanf("%i",&n);
	while(j<n){
		scanf("%s",&mina);
		diamantes=0;
		i=0;
		while(i<strlen(mina)){
			if (mina[i] == '\0'){
                break;
			}
			else if(mina[i]=='<'){
				for(k=i;k<strlen(mina);k++){
					if(mina[k]=='\0'){
						break;
					} else if(mina[k]=='>'){
						diamantes++;
						mina[k]='.';
						break;
					}
				}
			}
			i++;
		}
		printf("%i\n",diamantes);
		j++;
	}
	return 0;
}
