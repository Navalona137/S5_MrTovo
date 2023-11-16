package model;

import connexion.Connexion;
import java.lang.reflect.Field;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

public class Article {
    String id;
    String idArticle;
    String nom;

    public Article() {
    }

    public Article(String id, String idArticle, String nom) {
        this.id = id;
        this.idArticle = idArticle;
        this.nom = nom;
    }

    public String getid() {
        return id;
    }

    public String getidArticle() {
        return idArticle;
    }

    public String getnom() {
        return nom;
    }

    public void setid(String id) {
        this.id = id;
    }

    public void setidArticle(String idArticle) {
        this.idArticle = idArticle;
    }

    public void setnom(String nom) {
        this.nom = nom;
    }
    
    public int rowCount(Connection c) throws Exception {
        int count = 0;
        boolean isOpen=false;
        try {
            if(c==null){
                isOpen=true;
                Connexion con = new Connexion();
                c = con.connexPost();
            }
            Statement stmt = c.createStatement();
            ResultSet rs = stmt.executeQuery(String.format("select count(*) from article")); 
            
            while ( rs.next() ) {
                count = rs.getInt(1);
            }
            rs.close();
        } catch (SQLException e) {
            System.out.println("[ERROR] rowCount : " + e.getMessage());
        }finally{
            try {
                if (isOpen){
                    c.close();
                } 
            } catch (Exception e) {
                e.printStackTrace();
            }
        }
        return count;
    }
    
    public Article[] listAll(Connection c) throws Exception{
        boolean isOpen=false;
        Article[] objs = new Article[rowCount(c)];
        Field[] attribut = this.getClass().getDeclaredFields();
        
        try {
            if(c==null){
                isOpen=true;
                Connexion con = new Connexion();
                c = con.connexPost();
            }
            Statement stat = c.createStatement();  
            String sql = "select * from " + this.getClass().getName().split("\\.")[1];
            ResultSet res = stat.executeQuery(sql); 
            int i=0;
            while(res.next()){
                objs[i] = new Article(res.getString("id"), res.getString("idNature"), res.getString("nom"));
                i++;
            }
            stat.close();
            res.close();
        }catch(Exception e){
            System.out.println("[ERROR] listAll : " + e.getMessage());
        }finally{
            try {
                if (isOpen){
                    c.close();
                } 
            } catch (Exception e) {
                e.printStackTrace();
            }
        }
        return objs;
    }
}
