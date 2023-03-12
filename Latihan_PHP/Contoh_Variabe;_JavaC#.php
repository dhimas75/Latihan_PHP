// Contoh deklarasi variabel di C#

string[] words = { "apel", "jeruk" };
var wordQuery = from word in words
                where word[0] == 'g'
                select word;

foreach (string s in wordQuery)
{
    Console.WriteLine(s);
} 

// Contoh deklarasi variabel diJava

int nilaiInt;
double nialiDouble;
boolean nilaiBoolean;
char nilaiChar;

nilaiInt = 10;
nialiDouble = 5.4;
nilaiBoolean = true;
nilaiChar = 'B';