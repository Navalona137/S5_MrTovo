package model;

import connexion.Connexion;
import java.lang.reflect.Field;
import java.sql.Connection;
import java.sql.Date;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

public class BesoinAchat {
    String id;
    String idService;
    String idMembre;
    String idArticle;
    int quantite;
    Date dates;
    int etat;

    public BesoinAchat() {
    }

    public BesoinAchat(String idService, String idMembre, String idArticle, int quantite, Date dates, int etat) {
        this.idService = idService;
        this.idMembre = idMembre;
        this.idArticle = idArticle;
        this.quantite = quantite;
        this.dates = dates;
        this.etat = etat;
    }

    public BesoinAchat(String id, String idService, String idMembre, String idArticle, int quantite, Date dates, int etat) {
        this.id = id;
        this.idService = idService;
        this.idMembre = idMembre;
        this.idArticle = idArticle;
        this.quantite = quantite;
        this.dates = dates;
        this.etat = etat;
    }
    
    
    public String getid() {
        return id;
    }

    public String getidService() {
        return idService;
    }

    public String getidMembre() {
        return idMembre;
    }

    public String getidArticle() {
        return idArticle;
    }

    public int getquantite() {
        return quantite;
    }
    
    public Date getdates() {
        return dates;
    }

    public int getetat() {
        return etat;
    }

    public void setid(String id) {
        this.id = id;
    }

    public void setidService(String idService) {
        this.idService = idService;
    }

    public void setidMembre(String idMembre) {
        this.idMembre = idMembre;
    }

    public void setidArticle(String idArticle) {
        this.idArticle = idArticle;
    }

    public void setquantite(int quantite) {
        this.quantite = quantite;
    }
    
    public void setdates(Date dates) {
        this.dates = dates;
    }

    public void setetat(int etat) {
        this.etat = etat;
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
            ResultSet rs = stmt.executeQuery(String.format("select count(*) from besoinAchat")); 
            
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
    
    public BesoinAchat[] listAll(Connection c) throws Exception{
        boolean isOpen=false;
        BesoinAchat[] objs = new BesoinAchat[rowCount(c)];
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
                objs[i] = new BesoinAchat(res.getString("id"), res.getString("idService"), res.getString("idMembre"), res.getString("idArticle"), res.getInt("quantite"), res.getDate("dates"), res.getInt("etat"));
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
