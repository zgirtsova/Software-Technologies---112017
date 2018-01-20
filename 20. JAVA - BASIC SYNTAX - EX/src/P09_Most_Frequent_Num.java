import java.util.Arrays;
import java.util.Locale;
import java.util.Scanner;

public class P09_Most_Frequent_Num {

    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in).useLocale(Locale.ENGLISH);
        int[] inputArray = Arrays
                .stream(scan.nextLine().split(" "))
                .mapToInt(Integer::parseInt)
                .toArray();
        int startPos = 0;
        int length = 1;
        int bestPos = 0;
        int bestLen = 1;

        int count = 1;
        int mostFreqNum = inputArray[0];
        int bestLength = 0;

        for (int i = 0; i < inputArray.length - 1; i++)
        {
            for (int j = 1; j < inputArray.length - i; j++)
            {
                if (inputArray[i] == inputArray[i + j])
                {
                    count++;
                }

                if (count > bestLength)
                {
                    mostFreqNum = inputArray[i];
                    bestLength = count;
                }
            }
            count = 1;
        }

        System.out.println(mostFreqNum);
    }
}
