package servlet;

import connexion.Connexion;
import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import model.Article;
import model.BesoinAchat;

public class Validation extends HttpServlet {

    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        int tailleA = 0;
        try{
            Connexion con=new Connexion();
            BesoinAchat n = new BesoinAchat();
            tailleA = n.rowCount(con.connexPost());
        }catch(Exception e){
            e.printStackTrace();
        }
        BesoinAchat[] a = new BesoinAchat[tailleA];
        try{
            Connexion con=new Connexion();
            BesoinAchat nat = new BesoinAchat();
            a = nat.listAll(con.connexPost());
        }catch(Exception e){
            e.printStackTrace();
        }
        request.setAttribute("besoinAchat", a);
        RequestDispatcher dispat = request.getRequestDispatcher("./formValidation.jsp"); 
        dispat.forward(request,response);
    }

    // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /**
     * Handles the HTTP <code>GET</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Handles the HTTP <code>POST</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Returns a short description of the servlet.
     *
     * @return a String containing servlet description
     */
    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
