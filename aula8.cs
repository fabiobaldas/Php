using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Cadastro_cd
{
    #region Cd
    public class Cd
    {
        #region Member Variables
        protected int _cod_cd;
        protected string _art;
        protected string _titulo;
        protected string _descricao;
        protected unknown _preco;
        protected unknown _ano;
        protected string _tipo_musica;
        protected string _gravadora;
        protected string _musica;
        #endregion
        #region Constructors
        public Cd() { }
        public Cd(string art, string titulo, string descricao, unknown preco, unknown ano, string tipo_musica, string gravadora, string musica)
        {
            this._art=art;
            this._titulo=titulo;
            this._descricao=descricao;
            this._preco=preco;
            this._ano=ano;
            this._tipo_musica=tipo_musica;
            this._gravadora=gravadora;
            this._musica=musica;
        }
        #endregion
        #region Public Properties
        public virtual int Cod_cd
        {
            get {return _cod_cd;}
            set {_cod_cd=value;}
        }
        public virtual string Art
        {
            get {return _art;}
            set {_art=value;}
        }
        public virtual string Titulo
        {
            get {return _titulo;}
            set {_titulo=value;}
        }
        public virtual string Descricao
        {
            get {return _descricao;}
            set {_descricao=value;}
        }
        public virtual unknown Preco
        {
            get {return _preco;}
            set {_preco=value;}
        }
        public virtual unknown Ano
        {
            get {return _ano;}
            set {_ano=value;}
        }
        public virtual string Tipo_musica
        {
            get {return _tipo_musica;}
            set {_tipo_musica=value;}
        }
        public virtual string Gravadora
        {
            get {return _gravadora;}
            set {_gravadora=value;}
        }
        public virtual string Musica
        {
            get {return _musica;}
            set {_musica=value;}
        }
        #endregion
    }
    #endregion
}