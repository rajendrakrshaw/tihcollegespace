/*	Bank Account : Saving and Current	*/
#include<iostream>
#include<string.h>
#include<ctype.h>
using namespace std;
// Parent Class
class account{
	private:
		int account_balance=0;
	protected:
		char customer_name[20];
		long long int account_number;
		char account_type[8];
	public:
		char* func1(){				
			return customer_name;
		}
		void func2(char s[]){
			strcpy(customer_name,s);
		}
		long long int func3(){
			return account_number;
		}
		void func4(long long int n){
			account_number=n;
		}
		void insert_account_details(){
			cout<<"\n Customer's Name : ";
			cin>>customer_name;
			cout<<" Account Number : ";
			cin>>account_number;
		}
		void show_account_details(){
			cout<<endl<<" Customer's Name   : "<<customer_name;
			cout<<endl<<" Account Number    : "<<account_number;
			cout<<endl<<" Account Type      : "<<account_type<<" Account";
			cout<<endl<<" Available Balance : "<<account_balance;
		}
		void insert_account_type(char s[]){
			strcpy(account_type,s);
		}
		void credit_balance(int,int);
		void debit_balance(int,int);
};

void account::credit_balance(int cash=0,int interest=0){
	account_balance+=(cash-interest);
	cout<<"\n Amount credited succesfully";
}
void account::debit_balance(int cash=0,int interest=0){
	char s[8]="SAVING";
	// For Current Account
	if(strcmp(account_type,s)){
		if((account_balance-cash)>=1000){			// (e) check for the minimum balance, impose penalty, and update balance
			account_balance-=cash;
			cout<<"\n Amount debited succesfully";
		}
		else
		// Penalty due to low balance
		if(((account_balance-cash)<1000)&&((account_balance-cash)>=200)){	int n;
			cout<<"\n You have low balance. If you continue then 200 Rs will be deducted from your account. To continue press 1  ";
			cin>>n;
			if(n==1){
				account_balance-=(cash+200);
				cout<<"\n Amount debited succesfully with a penalty of Rs 200.";
			}
			else{
				cout<<"\n SORRY ! Unable to dispense amount.";
				return;
			}
		}
		else
			cout<<"\n SORRY ! Unable to dispense amount.";
	}
	else
	// For Saving Account
		if((account_balance-cash)>=0){
			account_balance-=cash;
			cout<<"\n Amount debited succesfully";
		}
		else
			cout<<"\n SORRY ! Unable to dispense amount.";
}

class cur_acct:public account{
	private:
		
	protected:
		
	public:
		credit_current_balance(){
			int cash,interest=0;
			cout<<" Enter Money you want to credit : ";
			cin>>cash;
			credit_balance(cash,interest);
		}
		debit_current_balance(){
			int cash,interest=0;
			cout<<" Enter Money you want to debit : ";
			cin>>cash;
			debit_balance(cash,interest);
		}
};

class sav_acct:public account{
	private:
		
	protected:
		
	public:
		//insert_account_type_to_SAVING(char []);
		credit_saving_balance(){
			int cash,interest=0;
			cout<<" Enter Money you want to credit : ";
			cin>>cash;
			interest=cash*5/100;							// (c) Compute and deposit interest
			credit_balance(cash,interest);
		}
		debit_saving_balance(){
			int cash,interest=0;
			cout<<" Enter Money you want to debit : ";
			cin>>cash;
			debit_balance(cash);
		}
};

int main(){
	char sav[8]="SAVING",cur[8]="CURRENT",ch;
	int n;
	cur_acct customer1;
	customer1.insert_account_type(cur);
	sav_acct customer2;
	customer2.insert_account_type(sav);
	
	customer1.insert_account_details();
	
	char cust_name[20];
	strcpy(cust_name,customer1.func1());
	customer2.func2(cust_name);
	
	long long int acct_number=customer1.func3();
	customer2.func4(acct_number);
	 
	while(true){
		cout<<endl<<endl<<endl<<" 1. Cash Debit into Saving Account";
		cout<<endl<<" 2. Cash Credit from Saving Account";
		cout<<endl<<" 3. Check Balance of Saving Account	";
		cout<<endl<<" 4. Cash Debit into Current Account";
		cout<<endl<<" 5. Cash Credit from Current Account";
		cout<<endl<<" 6. Check Balance of Current	";
		cin>>n;
		switch(n){
			case 1:	customer2.debit_saving_balance();
					break;
			case 2: customer2.credit_saving_balance();		//	(a) accwpt deposit from a customer and update the balance
					break;
			case 3: customer2.show_account_details();		// (b) display the balance
					break;
			case 4: customer1.debit_current_balance();		// (d) permit withdrawl and update the balance
					break;
			case 5: customer1.credit_current_balance();
					break;
			case 6: customer1.show_account_details();
					break;
			default: cout<<"\n Invalid Choice. Please enter again.";
						break;
		}
		cout<<"\n Another Transaction (Y/N)?	";
		cin>>ch;
		if(ch=='n' || ch=='N')
			return 0;
	}
	return 0;
}
