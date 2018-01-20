import java.util.ArrayList;
import java.util.Arrays;
import java.util.Locale;
import java.util.Scanner;

public class P07_Max_Sequence_of_Equal_Els {

    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in).useLocale(Locale.ENGLISH);
        int[] list = Arrays
                .stream(scan.nextLine().split(" "))
                .mapToInt(Integer::parseInt)
                .toArray();
        int bestStart = 0;
        int bestLength = 1;
        int startPos = 0;
        int startLen = 1;

        for (int i = 1; i < list.length; i++)
        {
            if (list[i] == list[i - 1])
            {
                startLen++;
            }
            else
            {
                startPos = i;
                startLen = 1;
            }
            if (startLen > bestLength)
            {
                bestLength = startLen;
                bestStart = startPos;
            }
        }
        for (int i = bestStart; i < bestStart + bestLength; i++)
        {
            System.out.print((list[i] + " "));
        }
    }

}
