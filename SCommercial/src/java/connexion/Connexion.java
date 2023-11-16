package connexion;

import java.sql.Connection;
import java.sql.DriverManager;

public class Connexion {
    public Connection connexPost()throws Exception{
        Class.forName("org.postgresql.Driver");
        Connection con = DriverManager.getConnection("jdbc:postgresql://localhost:5432/commercial","postgres","postgres");
        return con;
    }
}
