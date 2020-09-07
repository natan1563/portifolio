#include <stdio.h>
#include <stdlib.h>
#include <locale.h>
#include <string.h>

void main()
{
	setlocale(LC_ALL,"");
	
	int qnt,tam[qnt],i,cont,aux,par=0;
	char pe[qnt][60];
	do
	{
	printf("Digite a quantidade de botas entregues");
	scanf("%i", &qnt);
    }while(qnt<2 || qnt>10000 || qnt%2!=0);
    
    for(i=0;i<qnt;i++)
    {
    	do{
    	printf("Digite o tamanho da bota %i", i+1);
    	scanf("%i", &tam[i]); getchar();
        }while(tam[i]<30 || tam[i]>60);
        do
        {
        	printf("Digite o lado da bota %i", i+1);
        	scanf("%[^\n]s", &pe[qnt]); getchar();
			}while(pe[qnt][0] != 'e' && pe[qnt][0]!='d');
	}
	for (aux=1;aux<qnt;aux++)
	{
		for(i=0;i<qnt;i++)
		{
			if(tam[i]==tam[aux] && pe[i]!=pe[aux])
			{
				par++;
			aux=aux+1;	
			}
			
		}
		
	}
	printf("%i", par);
	
}
