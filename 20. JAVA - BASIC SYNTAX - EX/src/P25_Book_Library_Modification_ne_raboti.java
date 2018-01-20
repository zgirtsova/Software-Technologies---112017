
import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.util.*;
import java.util.stream.Collectors;

public class P25_Book_Library_Modification_ne_raboti {

    public static class Book {
        String title;
        String author;
        String publisher;
        LocalDate releaseDate;
        String barcode;
        double price;

        public String getTitle() {
            return title;
        }
        public void setTitle(String title) {
            this.title = title;
        }

        public String getAuthor() {
            return author;
        }
        public void setAuthor(String author) {
            this.author = author;
        }

        public String getPublisher() {
            return publisher;
        }
        public void setPublisher(String publisher) {
            this.publisher = publisher;
        }

        public LocalDate getReleaseDate() {
            return releaseDate;
        }
        public void setReleaseDate(LocalDate releaseDate) {
            this.releaseDate = releaseDate;
        }

        public String getBarcode() {
            return barcode;
        }
        public void setBarcode(String barcode) {
            this.barcode = barcode;
        }

        public double getPrice() {
            return price;
        }
        public void setPrice(double price) {
            this.price = price;
        }
    }
    public static class Library {
        public String name;
        public List<Book> bookList;

        public String getName() {
            return name;
        }
        public void setName(String name) {
            this.name = name;
        }

        public List<Book> getBookList() {
            return bookList;
        }
        public void setBookList(List<Book> bookList) {
            this.bookList = bookList;
        }
    }
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        // calls method for reading libraries
        Library lib = readLibrary();
        DateTimeFormatter formatter = DateTimeFormatter.ofPattern("dd.MM.yyyy");
        LocalDate d = LocalDate.parse(scan.nextLine(), formatter);

        // groups books in a map by their author and sums all prices
        Map<String, LocalDate> result = lib
                .bookList.stream()
                .filter(p -> p.releaseDate.isAfter(d))
                .collect(Collectors.toMap(
                        p -> p.title,
                        p -> p.releaseDate
                ));
        Map<String, LocalDate> sorted = result.entrySet().stream()
                .sorted(Map.Entry.comparingByKey())
                .collect(Collectors.toMap(Map.Entry::getKey, Map.Entry::getValue,
                        (oldValue, newValue) -> oldValue, LinkedHashMap::new));


        System.out.println(sorted);
        System.out.println();
        //calls method {sortHash} which sorts the map descending by price
        //then ascending by author's name

        //prints the Map.Entry
        for (String title:result.keySet()) {
            System.out.printf("%s -> " + result.get(title),title );
            System.out.println();
        }
    }
    private static Library readLibrary() {
        Scanner scan = new Scanner(System.in);
        List<Book> list = new ArrayList<>();

        int n = Integer.parseInt(scan.nextLine());
        for (int i = 0; i < n; i++) {
            Book b = readBook(scan.nextLine());
            list.add(b);
        }
        Library lib = new Library() {
            {
                name = "Library";
                bookList = list;
            }
        };
        return lib;
    }

    private static Book readBook(String s) {
        List<String> input = Arrays.stream(s.split(" "))
                .collect(Collectors.toList());
        DateTimeFormatter formatter = DateTimeFormatter.ofPattern("dd.MM.yyyy");

        Book b = new Book() {
            {
                title = input.get(0);
                author = input.get(1);
                publisher = input.get(2);
                releaseDate = LocalDate.parse(input.get(3), formatter);
                barcode = input.get(4);
                price = Double.parseDouble(input.get(5));
            }
        };

        return b;
    }
}
